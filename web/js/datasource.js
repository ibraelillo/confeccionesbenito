/*
 * Fuel UX Data components - static data source
 * https://github.com/ExactTarget/fuelux-data
 *
 * Copyright (c) 2012 ExactTarget
 * Licensed under the MIT license.
 */


    var RemoteDataSource = function (options) {
        this._formatter = options.formatter;
        this._columns = options.columns;
        this.url = options.url;
    };

    RemoteDataSource.prototype = {

        url: '',
        /**
         * Returns stored column metadata
         */
        columns: function () {
            return this._columns;
        },

        /**
         * Called when Datagrid needs data. Logic should check the options parameter
         * to determine what data to return, then return data by calling the callback.
         * @param {object} options Options selected in datagrid (ex: {pageIndex:0,pageSize:5,search:'searchterm'})
         * @param {function} callback To be called with the requested data.
         */
        data: function (options, callback) {
            var self = this;
            var url = self.url;


//            if (options.search) {
//                // Search active.  Add URL parameters for Flickr API.
//                url += '&search=' + options.search;
//            } else {
//
//                // No search. Return zero results to Datagrid
//                //callback({ data: [], start: 0, end: 0, count: 0, pages: 0, page: 0 });
//
//            }
            /*url += '&per_page=' + options.pageSize;
            url += '&page=' + (options.pageIndex + 1);
            */
            console.log(options);

            params = { per_page: options.pageSize, page: options.pageIndex +1 };

            if(options.search)
                params.search = options.search;


            $.ajax(url, {
                dataType: 'json',
                type: 'get',
                data: params
            }).error(function(response){
                notificar('Error', response.message, 'error');
            })
            .done(function (response) {

                    // Prepare data to return to Datagrid
                    var data = response.rows;
                    var count = response.total;
                    var startIndex = (response.page - 1) * response.perpage;
                    var endIndex = startIndex + response.perpage;
                    var end = (endIndex > count) ? count : endIndex;
                    var pages = response.pages;
                    var page = response.page;
                    var start = startIndex + 1;

                    // Allow client code to format the data
                    if (self._formatter) self._formatter(data);

                    // Return data to Datagrid
                    callback({ data: data, start: start, end: end, count: count, pages: pages, page: page });

            });
        }
    };