@if(!empty($route))
    @empty($multiParameter)
        <span href="{{ route("$route",$id) }}" class="trash" data-method="delete">
    	    <span></span>
    	    <i></i>
        </span>
    @else
        <span href="{{ route("$route",json_decode($id,true))}}" class="trash" data-method="delete">
    	    <span></span>
    	    <i></i>
        </span>
    @endempty
@endif

<script>
    $(document).on('click', '.trash', function (e) {
        e.preventDefault(); // does not go through with the link.
        var $this = $(this);
        $.post({
            type: $this.data('method'),
            url: $this.attr('href')
        }).done(function (data) {
            alert('success');
            console.log(data);
        });
    });
</script>
