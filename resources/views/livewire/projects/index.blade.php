<div class="grid grid-cols-2 gap-4">

   @foreach ($this->projects as $project)

            <a href="{{ route('projects.show', $project)}}">
                <x-project-cardsimple :$project />
            </a>

   @endforeach
</div>
