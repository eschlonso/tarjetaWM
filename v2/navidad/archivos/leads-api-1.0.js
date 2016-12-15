/*
 *  jquery-leads-api v1.0.0
 *  http://credileads.com
 *  Credileads SA
 */
;(function ( $, window, document, undefined ) {

    "use strict";

        var pluginName = "leadsApi",
                defaults = {
                landing : null,
                hash: null,
                apiKey: null,
                timestamp: null,
                validations: false,
                success: null,
                beforeSend: null,
                error:null,
                url: "https://api.rapidoyfacil.com/api/lead"

        };

        function Plugin ( element, options ) {
                this.element = element;
                this.qs = null;
                this.settings = $.extend( {}, defaults, options );
                this._defaults = defaults;
                this._name = pluginName;
                this.init();
        }

        $.extend(Plugin.prototype, {
                init: function () {
                    var _this = this;
                    var queryString = this.querystring();  
                    if(queryString){
                        $.cookie('source', null);
                        this.qs = queryString;
                        var value = $.base64.encode(queryString);
                        $.cookie('__presy__source', value, {expires: 30, path: '/'});
                    } else {
                        if($.cookie('__presy__source') != null){
                           var r = $.cookie('__presy__source');
                           this.qs = $.base64.decode(r);
                        }
                    }
                    
                    if(this.settings.validations){
                        
                        this.settings.validations.submitHandler = function(form){
                            _this.submitForm();
                        }
                        $(this.element).validate(this.settings.validations);
                    }else{
                        $(this.element).bind("submit", function(e) {
                            e.preventDefault();
                            _this.submitForm();
                            return false;
                        });
                    }
                     /*
                    setInterval(function() {
                      window.location.reload();
                    }, 300000);*/ 
                },
                submitForm: function () {
                    var headers = {'X-Api-Hash': this.settings.hash,
                               'X-Api-Key': this.settings.apiKey,
                               'X-Api-Timestamp': this.settings.timestamp};
                    
                    var lead    = {};
                    $.each( $(this.element).serializeArray(), function( index, obj ) {
                        lead[ obj.name ] = obj.value;
                    });
                    
                    var data    = JSON.stringify({ landing: this.settings.landing,
                                queryString: this.qs,
                                lead: lead});
                                
                    this.post(data, headers);
                    return false;
                },
                post: function(data, headers){
                    $.ajax({
                        type: 'post',
                        url: this.settings.url,
                        headers: headers,
                        processData: false,
                        data: data,
                        success: this.settings.success,
                        error: this.settings.error,
                        beforeSend: this.settings.beforeSend,
                        contentType: 'application/json',
                        dataType: 'json'
                    });
                },
                querystring: function(){
                    if(window.location.href.indexOf('?')!=-1){
                        return  window.location.href.slice(window.location.href.indexOf('?') + 1);
                    }else{
                        return false;
                    }
                }
      });

        // A really lightweight plugin wrapper around the constructor,
        // preventing against multiple instantiations
        $.fn[ pluginName ] = function ( options ) {
                return this.each(function() {
                        if ( !$.data( this, "plugin_" + pluginName ) ) {
                                $.data( this, "plugin_" + pluginName, new Plugin( this, options ) );
                        }
                });
        };

})( jQuery, window, document );
