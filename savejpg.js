function download() {
    div_content = $("#canvas");
    // make it as html5 canvas
    html2canvas(div_content).then(function (canvas) {
        //change the canvas to jpeg image
        var data = canvas.toDataURL('image/jpg');
        // imgcount = i;

        // console.log(i + ": " + tagdata);
        $.post('savejpg.php', { data: data }, function (res) {
            //if the file saved properly, trigger a popup to the user.
            if (res != '') {
                console.log(res);
                window.location.replace(res);
            }
            else {
                console.log('something wrong');
            }
        });
    });
}