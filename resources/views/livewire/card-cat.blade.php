<div>
    <div class="card">
        <div class="card-header">Mai category</div>
            <div class="card-body">
                <ul>
                    @foreach ($category->child as $cat )
                        
                    
                    <li><a href="">{{$cat->title}}</a></li>

                    @endforeach
                    
                </ul>
            </div>
    </div>    
</div>
