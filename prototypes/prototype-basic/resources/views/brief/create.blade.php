<form action="{{route('brief.store')}}" method="POST">
    @csrf
    nom brief<input name="name" type="text">
    date de livraison<input name="deliver_date" type="date">
    Date de recuperation<input name="recovery_date" type="date">
   <button>ajouter</button>
</form>
<a href="{{route('brief.index')}}"><button>return</button></a>