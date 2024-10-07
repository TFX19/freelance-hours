
<div>
   <h1>componente livewire</h1>
   <br>

   <input wire:model.live="search" placeholder="procurar utilizadores" />

   <br>

   <ul>
      @foreach ($users as $user)

         <li> {{ $user->name }}</li>

      @endforeach
   </ul>

</div>
