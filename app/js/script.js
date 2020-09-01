function series(arr){
  if(arr.length == 1){
    return arr[0];
  }
  else if(arr.length == 2){
    return arr[0] + ' and ' +arr[1];
  }
  else{
    var sb = '';
    var i;
    for(i=0; i<arr.length-1; i++){
      sb += arr[i] + ', ';
    }
    sb += 'and '+arr[i];
    return sb;
  }
}

function uploadImage(params){
  var image = new ss.SimpleUpload({
    button: params.button,
    url: params.url,
    name: 'filename',
    responseType: 'json',
    allowedExtensions: ['jpg', 'jpeg', 'png', 'pdf'],
    method: 'POST',
    onComplete: function(filename, response, uploadButton) {
      if (response.status == 'OK') {
        if(params.prompt){
          Materialize.toast(params.prompt, 3000);
        }
        if(params.success){
          params.success(response.result);
        }
      } else {
        Materialize.toast('Error uploading image: ' + response.msg, 3000);
      }
    },
    onExtError: function() {
      Materialize.toast('Error uploading image: Invalid file extension.', 3000);
    },
    onError: function(filename, errortype, status, statustext, uploadbtn, response) {
      Materialize.toast('Error uploading image: ' + statustext, 3000); 
    },
    onSizeError: function(filename, fileSize) {
      Materialize.toast('Image exceeds maximum size.', 3000);
    }
  });
}

function uploadPDF(params){
  var image = new ss.SimpleUpload({
    button: params.button,
    url: params.url,
    name: 'filename',
    responseType: 'json',
    allowedExtensions: ['pdf'],
    maxSize: 10000,
    method: 'POST',
    onComplete: function(filename, response, uploadButton) {
      if (response.status == 'OK') {
        if(params.prompt){
          Materialize.toast(params.prompt, 3000);
        }
        if(params.success){
          params.success(response.result);
        }
      } else {
        Materialize.toast('Error uploading PDF: ' + response.msg, 3000);
      }
    },
    onExtError: function() {
      Materialize.toast('Error uploading PDF: Invalid file extension.', 3000);
    },
    onError: function(filename, errortype, status, statustext, uploadbtn, response) {
      Materialize.toast('Error uploading PDF: ' + statustext, 3000); 
    },
    onSizeError: function(filename, fileSize) {
      Materialize.toast('PDF exceeds maximum size.', 3000);
    }
  });
}

String.prototype.plural = function(revert){

    var plural = {
        '(quiz)$'               : "$1zes",
        '^(ox)$'                : "$1en",
        '([m|l])ouse$'          : "$1ice",
        '(matr|vert|ind)ix|ex$' : "$1ices",
        '(x|ch|ss|sh)$'         : "$1es",
        '([^aeiouy]|qu)y$'      : "$1ies",
        '(hive)$'               : "$1s",
        '(?:([^f])fe|([lr])f)$' : "$1$2ves",
        '(shea|lea|loa|thie)f$' : "$1ves",
        'sis$'                  : "ses",
        '([ti])um$'             : "$1a",
        '(tomat|potat|ech|her|vet)o$': "$1oes",
        '(bu)s$'                : "$1ses",
        '(alias)$'              : "$1es",
        '(octop)us$'            : "$1i",
        '(ax|test)is$'          : "$1es",
        '(us)$'                 : "$1es",
        '([^s]+)$'              : "$1s"
    };

    var singular = {
        '(quiz)zes$'             : "$1",
        '(matr)ices$'            : "$1ix",
        '(vert|ind)ices$'        : "$1ex",
        '^(ox)en$'               : "$1",
        '(alias)es$'             : "$1",
        '(octop|vir)i$'          : "$1us",
        '(cris|ax|test)es$'      : "$1is",
        '(shoe)s$'               : "$1",
        '(o)es$'                 : "$1",
        '(bus)es$'               : "$1",
        '([m|l])ice$'            : "$1ouse",
        '(x|ch|ss|sh)es$'        : "$1",
        '(m)ovies$'              : "$1ovie",
        '(s)eries$'              : "$1eries",
        '([^aeiouy]|qu)ies$'     : "$1y",
        '([lr])ves$'             : "$1f",
        '(tive)s$'               : "$1",
        '(hive)s$'               : "$1",
        '(li|wi|kni)ves$'        : "$1fe",
        '(shea|loa|lea|thie)ves$': "$1f",
        '(^analy)ses$'           : "$1sis",
        '((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$': "$1$2sis",        
        '([ti])a$'               : "$1um",
        '(n)ews$'                : "$1ews",
        '(h|bl)ouses$'           : "$1ouse",
        '(corpse)s$'             : "$1",
        '(us)es$'                : "$1",
        's$'                     : ""
    };

    var irregular = {
        'move'   : 'moves',
        'foot'   : 'feet',
        'goose'  : 'geese',
        'sex'    : 'sexes',
        'child'  : 'children',
        'man'    : 'men',
        'tooth'  : 'teeth',
        'person' : 'people'
    };

    var uncountable = [
        'sheep', 
        'fish',
        'deer',
        'moose',
        'series',
        'species',
        'money',
        'rice',
        'information',
        'equipment'
    ];

    // save some time in the case that singular and plural are the same
    if(uncountable.indexOf(this.toLowerCase()) >= 0)
      return this;

    // check for irregular forms
    for(word in irregular){

      if(revert){
              var pattern = new RegExp(irregular[word]+'$', 'i');
              var replace = word;
      } else{ var pattern = new RegExp(word+'$', 'i');
              var replace = irregular[word];
      }
      if(pattern.test(this))
        return this.replace(pattern, replace);
    }

    if(revert) var array = singular;
         else  var array = plural;

    // check for matches using regular expressions
    for(reg in array){

      var pattern = new RegExp(reg, 'i');

      if(pattern.test(this))
        return this.replace(pattern, array[reg]);
    }

    return this;
}

function isInteger(x) {
    return (typeof x === 'number') && (x % 1 === 0);
}

function ajax(opts){
  if(opts.hasOwnProperty('xhr')){
    $.ajax({
      type: 'POST',
      dataType: (opts.hasOwnProperty('dataType'))? opts.dataType:'json',
      cache: (opts.hasOwnProperty('cache'))? opts.cache:true,
      contentType: (opts.hasOwnProperty('contentType'))? opts.contentType: true,
      processData: (opts.hasOwnProperty('processData'))? opts.processData:true,
      async: (opts.async==false)? false: 'application/x-www-form-urlencoded; charset=UTF-8',
      data: opts.data,
      url: opts.url,
      xhr: opts.xhr,
      success : function(response){
        if(response.status == 'OK'){
          if(opts.prompt){
            Materialize.toast(opts.prompt, 3000);
          }
          if(opts.success){
            opts.success(response.result);
          }
        }
        else if(response.status == 'ERROR'){
          Materialize.toast(response.error, 3000);
        }
        else{
          console.log(response);
        }
      },
      error: function(e){
        console.log(e);
      },
    });  
  }
  else{
    $.ajax({
      type: 'POST',
      dataType: (opts.hasOwnProperty('dataType'))? opts.dataType:'json',
      cache: (opts.hasOwnProperty('cache'))? opts.cache:true,
      processData: (opts.hasOwnProperty('processData'))? opts.processData:true,
      async: (opts.async==false)? false: 'application/x-www-form-urlencoded; charset=UTF-8',
      data: opts.data,
      url: opts.url,
      success : function(response){
        if(response.status == 'OK'){
          if(opts.prompt){
            Materialize.toast(opts.prompt, 5000);
          }
          if(opts.success){
            opts.success(response.result);
          }
        }
        else if(response.status == 'ERROR'){
          Materialize.toast(response.error, 5000);
        }
        else{
          console.log(response);
        }
      },
      error: function(e){
        console.log(e);
      },
    });  
  }
}

function testajax(obj) {
  url = obj.url;
  params = obj.data;

  var f = $("<form target='_blank' method='POST' style='display:none;'></form>").attr({
    action: url
  }).appendTo(document.body);
  for (var i in params) {
    if (params.hasOwnProperty(i)) {
      $('<input type="hidden" />').attr({
        name: i,
        value: params[i]
      }).appendTo(f);
    }
  }
  f.submit();
  f.remove();
}

function fix_navlogo(){
  if ( ($(window).scrollTop() >= 125 || $('#prenav').hasClass('nothome')) && $(window).width() >= 1000) {
    $('.tobefixed').addClass('navbar-fixed');
    $( "#osalogonav" ).fadeIn("fast");
    $('#osalogonav2').hide();
  }
  if ($(window).scrollTop() < 124 && $(window).width() >= 1000 && !$('#prenav').hasClass('nothome')) {
    $('.tobefixed').removeClass('navbar-fixed');
    $( "#osalogonav" ).fadeOut("fast");
    $('#osalogonav2').hide();
  }
  if (($(window).scrollTop() >= 125 || $('#prenav').hasClass('nothome')) && $(window).width() < 1000) {
    $('.tobefixed').addClass('navbar-fixed');
    $( "#osalogonav2" ).fadeIn("fast");
    $('#osalogonav').hide();
  }
  if ($(window).scrollTop() < 124 && $(window).width() < 1000 && !$('#prenav').hasClass('nothome')) {
    $('.tobefixed').removeClass('navbar-fixed');
    $( "#osalogonav2" ).fadeOut("fast");
    $('#osalogonav').hide();
  }
}