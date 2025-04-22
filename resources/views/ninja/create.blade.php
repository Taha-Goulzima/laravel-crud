<x-layout>
  
    <h1>create page</h1>
    <form action="{{route('ninja.store')}}" method="POST">
        @csrf
        <label for="name">ninja name :</label>
        <input type="text" id="name" name="name" value="{{old('name')}}" required>
        <label for="name">ninja lastname :</label>
        <input type="text" id="lastname" name="lastname" value="{{old('lastname')}}" required>
        <label for="gym_id">gym</label>
       <select name="gym_id" id="gym_id" required>
        <option value="" disabled selected>select a gym </option>
        @foreach ($gyms as $gym )
        <option value="{{$gym->id}}" {{$gym->id == old('gym_id')?'selected' : ''}}>{{$gym->name}}</option>
            
        @endforeach
       </select>
       <button type="submit">create a ninja</button>
       @if($errors->any())
        <ul class="px-4 py-2 bg-red-100">
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
                
            @endforeach
        </ul>

       @endif
    </form>
</x-layout>