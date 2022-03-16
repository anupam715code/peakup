/*
* Author: Shachish
* Application JS
*/

/* Admin */
function datatableCounter(datatable, index) {
    return ((datatable.API.params.pagination.page -1 ) * datatable.API.params.pagination.perpage) + (index+1);
}