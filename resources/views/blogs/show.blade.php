<x-guest-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach ($blogs as $blog)
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $blog->title }}</h3>
                    </div>
                    <div class="card-body">
                        <p>{{ $blog->content }}</p>
                    </div>
                    <div>
                        <p>{{ $blog->source }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</x-guest-layout>
