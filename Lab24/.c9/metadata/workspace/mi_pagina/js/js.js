{"filter":false,"title":"js.js","tooltip":"/mi_pagina/js/js.js","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":24,"column":1},"action":"insert","lines":["function productos()","{","    console.log(\"click\");","    ","    $.get(\"ajax.php\", {opcion:\"productos\"}).done(function(data){","        ","        var ajaxResponse = data;","        ","        document.getElementById(\"page\").innerHTML = data;","    });","    ","}","","function informacion()","{","    console.log(\"click\");","    ","    $.get(\"ajax.php\", {opcion:\"info\"}).done(function(data){","        ","        var ajaxResponse = data;","        ","        document.getElementById(\"page\").innerHTML = data;","    });","    ","}"],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":24,"column":1},"end":{"row":24,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1523905562963,"hash":"772b3e621708dbd420fb85d1865010fb29bb0604"}