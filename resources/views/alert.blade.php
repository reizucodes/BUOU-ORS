{{-- Message --}}
@if (Session::has('success'))
<div id="alert" class="flex p-4 mb-4 bg-blue-100 border-t-4 border-blue-500 dark:bg-blue-200" role="alert">
  <svg class="flex-shrink-0 w-5 h-5 text-blue-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
  </svg>
  <div class="ml-3 font-medium text-blue-700">
    {{ session('success') }}
  </div>
</div>
@endif
<!--ERROR CATCH-->
@if ($errors->any())
<div>
  <div id="alert" class="flex p-4 mb-4 bg-red-100 border-t-4 border-red-500 dark:bg-red-200" role="alert">
    <ul class="list-none">
      @foreach ($errors->all() as $error)
      <li class="flex">
        <svg class="flex-shrink-0 w-5 h-5 text-red-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
        </svg>
        <div class="ml-3 font-medium text-red-700">{{ $error }}</div>
      </li>
      @endforeach
    </ul>
  </div>
</div>
@endif

<script>
  // Script For Close alert
  setTimeout(() => {
    const box = document.getElementById('alert');
    // 👇️ removes element from DOM
    box.style.display = 'none';
  }, 3000)

</script>
