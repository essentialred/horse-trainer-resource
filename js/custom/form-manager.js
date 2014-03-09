'use strict';

var ESF = window.ESF || {};

// export
ESF.FormManager = FormManager;

function FormManager(form) {
	this.form = form;
	this.$form = $(form);
	this.action = form.action;
	this.$inputs = this.$form.find('input, select, button, textarea');

	this.$body = $('body');

	this.request;
};

$.extend(FormManager.prototype, {

	beforeSubmit: function() {
		this.$body.addClass('submitting');
		this.inputs.prop('disabled', true);
	},

	afterSubmit: function() {
		this.$body.removeClass('submitting');
		this.inputs.prop('disabled', false);
	},

	done: function(response, status, jqXHR) {
		if(response.success === true){
	        alert('yes');
	    } else {
	        alert('no');
	    }
	},

	fail: function (jqXHR, status, errorThrown){
        // log the error to the console
        console.error(
            "The following error occured: "+
                status, errorThrown
        );
    },

	init: function() {
		var _this = this;

		this.$form.submit(function(e){
			e.preventDefault();

			if (_this.request) {
				_this.request.abort();
				return;
			};

			_this.beforeSubmit();

			// serialize form data
			var serializedData = _this.$form.serialize();

			// fire request
	        _this.request = $.ajax({
	            url: _this.action,
	            type: "post",
	            data: serializedData
	        });

	        // on success
	        _this.request.done($.proxy(_this.done, this));

	        // on fail
	        _this.request.fail($.proxy(_this.fail, this));

	        // always
	        _request.always($.proxy(_this.afterSubmit, this));

		})
	}

})