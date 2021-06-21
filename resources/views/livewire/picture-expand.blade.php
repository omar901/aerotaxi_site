<div>
<div>
               <img wire:click="refreshpicture" class="h-400 rounded-2xl shadow-lg mx-auto" src="img/playa_caracas_vqs.jpg" alt="Playa Caracas Vieques PR">
            </div>

   <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
  <li class="relative">
    <div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
      <img  src="img{{$picture}}" alt="" class="object-cover pointer-events-none group-hover:opacity-75">
      <button wire:click="refreshpicture" type="button" class="absolute inset-0 focus:outline-none">
        <span class="sr-only">View details for Flamenco beach, Culebra PR</span>
      </button>
    </div>
    <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">Flamenco Beach</p>
    <p class="block text-sm font-medium text-gray-500 pointer-events-none">Culebra, PR</p>
  </li>
   </ul>
</div>
