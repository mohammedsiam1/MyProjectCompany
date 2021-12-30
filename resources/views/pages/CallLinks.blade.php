
<script src="{{ asset('frountend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frountend/js/js.js') }}"></script>
<script>
$(document).ready(function(){
$(document).on('click','.linkClickNow',function(e){
    e.preventDefault();
   var id=$(this).attr('id_link');
   $.ajax({
       url:"{{ route('AllDetil.Links') }}",
       type:'get',
       dataType:'json',
       data:{
           '_token':"{{ csrf_token() }}",
           'id':id
       },
       success:function(response){
           var len=0;
if(response['data']!=null){
    len=response['data'].length;
}
if(len>0){
    $('.resultlink').empty();
for(var i=0;i<len;i++){

    var pagename=response['data'][i].linkPageNmae;
    var pagedetilname=response['data'][i].linkdetileName;
    var linkname=response['data'][i].linkRoutName;
    $('.resultlink').append(
        '<div class="show"align="center"><a style="text-decoration: none;" href="'+linkname+'"class=sel_link nav-link active navbar-light" ><span  class="name">'+pagedetilname+'</span> </a> </div>');
}
}else{
    $('.resultlink').empty();
}

       },
error:function(response){
"<div>error here 404</div>"
}
   });
});
});
</script>
