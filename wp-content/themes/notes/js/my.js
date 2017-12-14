/**
 * Created by Eric on 2017/11/29.
 */
$(function () {
    $(".mySub").click(function () {

        $.ajax({
            url:"/wp-content/themes/notes/ok.php",
            type:"post",
            dataType:"json",
            success:function (data) {
               console.log(data);
               $.each(data,function (i,e) {
                   $(".myBack").append("<input name='Butt' type='button' class='myBut' value='"+e.Bill+"'>")
               });
                $(".myBut").click(function () {
                    ok($(this).val());
                })
            //
            },
            error:function (data) {

            }
        })
    })
function ok(a) {
    alert(a)
}
})