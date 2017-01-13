//hauteur largeur
var bw = 800;
var bh = 600;
var p = 10;
//taille canvas
var cw = bw + (p * 2) + 1;
var ch = bh + (p * 2) + 1;
var canvas = $('<canvas/>').attr({
    width: cw
    , height: ch
}).appendTo('body');
var context = canvas.get(0).getContext("2d");

function drawBoard() {
    for (var x = 0; x <= bw; x += 32) {
        context.moveTo(0.5 + x + p, p);
        context.lineTo(0.5 + x + p, bh + p);
    }
    for (var x = 0; x <= bh; x += 32) {
        context.moveTo(p, 0.5 + x + p);
        context.lineTo(bw + p, 0.5 + x + p);
    }
    context.strokeStyle = "black";
    context.stroke();
}
drawBoard();