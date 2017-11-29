


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            	{{ csrf_field() }}   
            	 <div class="panel-body">
<?php

$i=1;

	for($i=1;$i<=4;)
	{?>
		 {{$id_no[$i]}}

	<?php
}

?>

</div>
</div>

</div>
</div>
</div>
@endsection