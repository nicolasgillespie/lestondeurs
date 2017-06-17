NG_App.Obj = new function() {
  var _this = this;
  var d_map;

  _this.construct = function() {
    d_map = $('#map-homepage');

    _this.objectsExist();
  }

  _this.objectsExist = function() {
    if (d_map.get(0) != null) {
      _this.fn_map(d_map);
    }
  }

  _this.fn_map = function(d_map) {
    d_map.each(function() {
      var objThis = this;
      var objInfo = new Object();

      objInfo.class = 'map';

      var objFn = function(param) {
        NG_App.log(param);

        _this.create_map(param.obj);
        NG_App.Functions.resize_map(param.obj);

        return param;
      }

      NG_App.Functions.newObj(objThis, objFn, objInfo);
    });
  }

  _this.create_map = function() {
    google.maps.event.addDomListener(window, 'load', _this.init_map);
  }

  _this.init_map = function(index) {
    var param = $('#map-homepage').data('param');
    var mapCanvas = param.obj.get(0);

    var mapOptions = {
      center: _NG_var.villes.mtl,
      zoom: 9
    }

    var map = new google.maps.Map(mapCanvas, mapOptions);

    NG_App.Functions.setMapOptions(map, param);


  }

}
