
<html>
<head>
<title>ConvNetJS demo: Image Painting</title>
<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-3698471-21', 'stanford.edu');
  ga('send', 'pageview');

</script>

<style>
body {
  font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
  color: #333;
  padding: 20px;
}
</style>

<link rel="stylesheet" href="jquery-ui.min.css">
<script src="jquery-1.8.3.min.js"></script>
<script src="jquery-ui.min.js"></script>

<script src="convnet.js"></script>
<script type="text/javascript">

var data, labels;
var layer_defs, net, trainer;

// create neural net
var t = "layer_defs = [];\n\
layer_defs.push({type:'input', out_sx:1, out_sy:1, out_depth:2}); // 2 inputs: x, y \n\
layer_defs.push({type:'fc', num_neurons:20, activation:'relu'});\n\
layer_defs.push({type:'fc', num_neurons:20, activation:'relu'});\n\
layer_defs.push({type:'fc', num_neurons:20, activation:'relu'});\n\
layer_defs.push({type:'fc', num_neurons:20, activation:'relu'});\n\
layer_defs.push({type:'fc', num_neurons:20, activation:'relu'});\n\
layer_defs.push({type:'fc', num_neurons:20, activation:'relu'});\n\
layer_defs.push({type:'fc', num_neurons:20, activation:'relu'});\n\
layer_defs.push({type:'regression', num_neurons:3}); // 3 outputs: r,g,b \n\
\n\
net = new convnetjs.Net();\n\
net.makeLayers(layer_defs);\n\
\n\
trainer = new convnetjs.SGDTrainer(net, {learning_rate:0.01, momentum:0.9, batch_size:5, l2_decay:0.0});\n\
";

var batches_per_iteration = 100;
var mod_skip_draw = 100;
var smooth_loss = -1;

function update(){
  // forward prop the data
  var W = nn_canvas.width;
  var H = nn_canvas.height;

  var p = oridata.data;

  var v = new convnetjs.Vol(1,1,2);
  var loss = 0;
  var lossi = 0;
  var N = batches_per_iteration;
  for(var iters=0;iters<trainer.batch_size;iters++) {
    for(var i=0;i<N;i++) {
      // sample a coordinate
      var x = convnetjs.randi(0, W);
      var y = convnetjs.randi(0, H);
      var ix = ((W*y)+x)*4;
      var r = [p[ix]/255.0, p[ix+1]/255.0, p[ix+2]/255.0]; // r g b
      v.w[0] = (x-W/2)/W;
      v.w[1] = (y-H/2)/H;
      var stats = trainer.train(v, r);
      loss += stats.loss;
      lossi += 1;
    }
  }
  loss /= lossi;

  if(counter === 0) smooth_loss = loss;
  else smooth_loss = 0.99*smooth_loss + 0.01*loss;

  var t = '';
  t += 'loss: ' + smooth_loss;
  t += '<br>'
  t += 'iteration: ' + counter;
  $("#report").html(t);
}

function draw() {
  if(counter % mod_skip_draw !== 0) return;

  // iterate over all pixels in the target array, evaluate them
  // and draw
  var W = nn_canvas.width;
  var H = nn_canvas.height;

  var g = nn_ctx.getImageData(0, 0, W, H);
  var v = new convnetjs.Vol(1, 1, 2);
  for(var x=0;x<W;x++) {
    v.w[0] = (x-W/2)/W;
    for(var y=0;y<H;y++) {
      v.w[1] = (y-H/2)/H;

      var ix = ((W*y)+x)*4;
      var r = net.forward(v);
      g.data[ix+0] = Math.floor(255*r.w[0]);
      g.data[ix+1] = Math.floor(255*r.w[1]);
      g.data[ix+2] = Math.floor(255*r.w[2]);
      g.data[ix+3] = 255; // alpha...
    }
  }
  nn_ctx.putImageData(g, 0, 0);
}

function tick() {
  update();
  draw();
  counter += 1;
}

function reload() {
  counter = 0;
  eval($("#layerdef").val());
  //$("#slider").slider("value", Math.log(trainer.learning_rate) / Math.LN10);
  //$("#lr").html('Learning rate: ' + trainer.learning_rate);
}
function refreshSwatch() {
  var lr = $("#slider").slider("value");
  trainer.learning_rate = Math.pow(10, lr);
  $("#lr").html('Learning rate: ' + trainer.learning_rate);
}

var ori_canvas, nn_canvas, ori_ctx, nn_ctx, oridata;
var sz = 200; // size of our drawing area
var counter = 0;
$(function() {
    // dynamically load lena image into original image canvas
    var image = new Image();
    //image.src = "lena.png";
    image.onload = function() {

      ori_canvas = document.getElementById('canv_original');
      nn_canvas = document.getElementById('canv_net');
      ori_canvas.width = sz;
      ori_canvas.height = sz;
      nn_canvas.width = sz;
      nn_canvas.height = sz;

      ori_ctx = ori_canvas.getContext("2d");
      nn_ctx = nn_canvas.getContext("2d");
      ori_ctx.drawImage(image, 0, 0, sz, sz);
      oridata = ori_ctx.getImageData(0, 0, sz, sz); // grab the data pointer. Our dataset.

      // start the regression!
      setInterval(tick, 1);
    }
    image.src = "cat.png";

    // init put text into textarea
    $("#layerdef").val(t);

    // load the net
    reload();

    // set up slider for learning rate
    $("#slider").slider({
      orientation: "horizontal",
      min: -4,
      max: -1,
      step: 0.05,
      value: Math.log(trainer.learning_rate) / Math.LN10,
      slide: refreshSwatch,
      change: refreshSwatch
    });
    $("#lr").html('Learning rate: ' + trainer.learning_rate);

    $("#f").on('change', function(ev) {
      var f = ev.target.files[0];
      var fr = new FileReader();
      fr.onload = function(ev2) {
        var image = new Image();
        image.onload = function(){
          ori_ctx.drawImage(image, 0, 0, sz, sz);
          oridata = ori_ctx.getImageData(0, 0, sz, sz);
          reload();
        }
        image.src = ev2.target.result;
      };
      fr.readAsDataURL(f);
    });

    $('.ci').click(function(){
      var src = $(this).attr('src');
      ori_ctx.drawImage(this, 0, 0, sz, sz);
      oridata = ori_ctx.getImageData(0, 0, sz, sz);
      reload();
    });
});

</script>

<style type="text/css">
canvas { 
    border: 1px solid #555;
    margin-top: 10px;
}
#wrap {
  width: 800px;
  margin-right: auto;
  margin-left: auto;
  margin-bottom: 200px;
}
#gallery img {
  width: 195;
  height: 195px;
  display: inline-block;
}
</style>

</head>

<body>

<div id="wrap">
<h1><a href="http://cs.stanford.edu/people/karpathy/convnetjs/">ConvnetJS</a> demo: Image "Painting"</h1>

<p>This demo that treats the pixels of an image as a learning problem: it takes the (x,y) position on a grid and learns to predict the color at that point using regression to (r,g,b). It's a bit like compression, since the image information is encoded in the weights of the network, but almost certainly not of practical kind :)</p>
<p>
  Note that the entire ConvNetJS definition is shown in textbox below and it gets eval()'d to create the network, so feel free to fiddle with the parameters and hit "reload". I found that, empirically and interestingly, deeper networks tend to work much better on this task given a fixed parameter budget.
</p>

<p>Report questions/bugs/suggestions to <a href="https://twitter.com/karpathy">@karpathy</a>.</p>

<textarea id="layerdef" style="width:100%; height:250px;"></textarea>
<br /><br  />
<input id="buttontp" type="submit" value="reload network" onclick="reload();" style="width: 200px; height: 30px;"/>

<div style="float: right;">
Choose your own image: 
<input id="f" type="file" />
</div>

<br>

<div style="background-color: #EEE; padding: 10px; margin-top: 10px;">
<div style="float: left; margin-left: 200px;">
  Original Image<br>
  <canvas id="canv_original"></canvas>
</div>
<div style="float: left; margin-left: 10px;">
  Neural Network output<br>
  <canvas id="canv_net"></canvas>
</div>

<div style="clear:both;"></div>
</div>

<br>
<div id="report"></div>
<br>

<div id="lr">Learning rate:</div>
<div id="slider"></div>
<div>The learning rate should probably be decreased over time (slide left) to let the network better overfit the training data. It's nice to not have to worry about overfitting.</div>

<br><br>
<div>
  You can upload your own image above (click Choose File), or you can click on any of the images below to load them.
</div>


<br><br>
<p>Go <a href="http://cs.stanford.edu/people/karpathy/convnetjs/">back to ConvNetJS</a></p>

</div>

</body>
</html>

