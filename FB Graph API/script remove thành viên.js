var id_group="id group cần remove thành viên";
var list="idmem|idmem";//list id user ngăn cách bằng ký tự |
f = document.querySelector('[name="fb_dtsg"]');
if (null !== f) {
    var obj = list.split("|");
    obj.forEach(function(id, index){
        fetch("https://www.facebook.com/ajax/groups/members/remove.php?group_id="+id_group+"&uid=" + id + "&is_undo=0", {
            method: "POST",
            credentials:"include",
            body: 'fb_dtsg='+encodeURIComponent(f.value)+'&confirm=!0&__user=100006330279066&__a=1'
        }).then(function() {
            console.log('Remove id: '+id);
        });
    });
}
