<form action="{{route('brief.store')}}" method="POST">
    @csrf
    nom <input type="text" name="brief_name">
    date de livraison<input type="dateTime-local" name="delivery_date">
     date de recuperation<input type="dateTime-local" name="recuperation_date">
    <button type="submit">add</button>
</form>