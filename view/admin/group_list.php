
<div class="p-4">
<div class="search-box chat-search-box">
<div class="input-group bg-light  input-group-lg rounded-lg">
  <form>
    <div class="input-group-prepend">
        <button class="btn btn-link text-decoration-none text-muted pr-1" type="button">
            <i class="ri-search-line search-icon font-size-18"></i>
        </button>
         <input type="text" class="form-control bg-light search_text" placeholder="Search groups..." name="search_text" id="search_text">
    </div>
   
  </form>
</div>
</div>
</div>

<div class="p-4 chat-message-list chat-group-list group_data" data-simplebar>




</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
$(document).ready(function(){
    load_data();
    function load_data()
    {
        var search=null;

        $.ajax({
            url:"user/group_search.php",
            method:"post",
             data: {'data' : search},
            success:function(data)
            {
                $('.group_data').html(data);
            }
        });
    }
    
    $('.search_text').keyup(function(){
        var search = $(this).val();

        var q='data='+search;

        //alert(search);
        if(search != '')
        {
            $.ajax({
            url:"user/group_search.php",
            method:"post",
             data: {'data' : search},
            success:function(data)
            {
                $('.group_data').html(data);
            }
        });
        }
        else
        {
            load_data();            
        }
    });
});
</script>