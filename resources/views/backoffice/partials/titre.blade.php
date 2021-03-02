<section class="container mt-5">
    <h1>Titre</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">subtitle</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($titres as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->titre}}</td>
              <td>{{$item->subtitre}}</td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
    </form>
  </section>