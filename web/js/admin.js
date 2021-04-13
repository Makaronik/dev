// активный пункт сайдбара
$(function () {

    $('.sidebar-menu a').each(function () {
        let location = window.location.protocol + '//' + window.location.host + window.location.pathname;
        let link = this.href;
        if (link == location) {
            $('.sidebar-menu li').removeClass('active');
            $(this).parent().addClass('active');
            $(this).closest('.treeview').addClass('active');
        }
    });
});

//
// $(document).ready(function getCart() {
//     $('#w0 input[type=checkbox]').click(function () {
//         var keys = $("#w0").yiiGridView('getSelectedRows');
//         // var keys = $(this).parents('.gridview').yiiGridView('getSelectedRows');
//         // var keys = $('#gridview').yiiGridView('getSelectedRows');
//         $.ajax({
//             url: '../admin/test/test',
//             type: 'POST',
//             dataType: 'json',
//             data: {keylist:keys},
//
//             success: function (result) {
//
//                 if (!keys) {
//                     alert('Ошибка');
//                 }
//                 // alert(keys);
//                 console.log(keys);
//             },
//             // error: function () {
//             //     alert('Error!');
//             // }
//         });
//
//     });
// });



// $(document).ready(function getCart() {
//     $('#w0 input[type=checkbox]').click(function () {
//         var keys = $("#w0").yiiGridView('getSelectedRows');
//         // var keys = $(this).parents('.gridview').yiiGridView('getSelectedRows');
//         // var keys = $('#gridview').yiiGridView('getSelectedRows');
//         $.ajax({
//             url: '../admin/test/index',
//             type: 'POST',
//             dataType: 'json',
//             data: {keylist:JSON.stringify(keys)},
//
//             success: function (result) {
//
//                 if (!keys) {
//                     alert('Ошибка');
//                 }
//                 // alert(keys);
//                 console.log(keys);
//             },
//             // error: function () {
//             //     alert('Error!');
//             // }
//         });
//
//     });
// });















// отправка чекбоксов сразу
// $(document).ready(function getCart() {
//     $('#w1 input[type=checkbox]').click(function () {
//         var keys = $("#w1").yiiGridView('getSelectedRows');
//         // var keys = $(this).parents('.gridview').yiiGridView('getSelectedRows');
//         // var keys = $('#gridview').yiiGridView('getSelectedRows');
//         $.ajax({
//             url: '../admin/order/create',
//             data: {keylist: keys},
//             type: 'GET',
//             // dataType: 'json',
//             success: function (result) {
//
//                 if (!keys) {
//                     alert('Ошибка');
//                 }
//                 // alert(keys);
//                 console.log(keys);
//             },
//             error: function () {
//                 alert('Error!');
//             }
//         });
//
//     });
// });



// // отправка чекбоксов сразу
// $(document).ready(function getCart() {
//     $('#w1 input[type=checkbox]').click(function () {
//         var keys = $("#w1").yiiGridView('getSelectedRows');
//         // var keys = $(this).parents('.gridview').yiiGridView('getSelectedRows');
//         // var keys = $('#gridview').yiiGridView('getSelectedRows');
//         $.ajax({
//             url: '../admin/order/create',
//             data: {keylist: keys},
//             type: 'GET',
//             // dataType: 'json',
//             success: function (result) {
//
//                 if (!keys) {
//                     alert('Ошибка');
//                 }
//                 // alert(keys);
//                 console.log(keys);
//             },
//             error: function () {
//                 alert('Error!');
//             }
//         });
//
//     });
// });




















// action for all selected rows
// function submit(){
//     var dialog = confirm("Are you sure to submit the installment?");
//     if (dialog == true) {
//         $('#w1 input[type=checkbox]').click(function () {
//          var keys = $('#w1').yiiGridView('getSelectedRows');
//             // console.log(keys);
//             // var ajax = new XMLHttpRequest();
//             $.ajax({
//                 url: '../admin/order/create',
//                 data: {keylist: keys},
//                 type: 'GET',
//                 // dataType: 'json',
//                 success: function (result) {
//
//                     if (!keys) {
//                         alert('Ошибка');
//                     }
//                     // alert(keys);
//                     console.log(keys);
//                 },
//                 error: function () {
//                     alert('Error!');
//                 }
//             });
//         });
//     }
// }















// $(function () {
//     $('input').iCheck({
//         checkboxClass: 'icheckbox_square-blue',
//         radioClass: 'iradio_square-blue',
//         increaseArea: '20%' /* optional */
//     });
// });










<!-- Submit button -->
// <button type="button" onclick="submit()" class="btn btn-success pull-right">Submit</button>







// отправка выбраных чекбоксов после нажатия кнопки
// <script type="text/javascript">
//     // action for all selected rows
//     function submit(){
//     var dialog = confirm("Are you sure to submit the installment?");
//     if (dialog == true) {
//     var keys = $('#grid').yiiGridView('getSelectedRows');
//     // console.log(keys);
//     var ajax = new XMLHttpRequest();
//     $.ajax({
//     type: "POST",
//     url: 'index.php?r=installment/submit', // Your controller action
//     data: {keylist: keys},
//     success: function(result){
//     console.log(result);
// }
// });
// }
// }
// </script>
// <!-- Submit button -->
// <button type="button" onclick="submit()" class="btn btn-success pull-right">Submit</button>





    // function getRows()
    // {
    //     var strvalue = "";
    //     $('input[name="selection[]"]:checked').each(function() {
    //     if(strvalue!="")
    //     strvalue = strvalue + ","+this.value;
    //     else
    //     strvalue = this.value;
    // });
    //     // strvalue contain selected row by comma separated
    //     $.ajax({
    //
    //     url: 'admin/book/index',
    //     dataType: 'json',
    //         type: 'POST',
    //     data: {keylist: keys},
    //     success: function(data) {
    //     alert('I did it! Processed checked rows.')

    //
    //
    // });
    // }

//






