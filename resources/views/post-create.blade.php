<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Crea un post</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

   </head>
   <body>
      <form method="POST" action="{{route('post.store')}}">
         @CSRF
         @method('POST')
        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
          <label for="title">Autore</label>
          <input type="text" class="form-control" name="author">
        </div>
        <div class="form-group">
          <label for="categoria">Categoria</label>
          <select name="category_id" class="form-control">
            @foreach ($categorie as $categoria)
              <option value="{{$categoria->id}}">
                  {{$categoria->title}}
              </option>
           @endforeach
         </select>
        </div>
        <div class="form-group">
          <label for="descrizione">Descrizione</label>
          <input type="text" class="form-control" name="description">
        </div>
        <div class="form-group">
          <label for="tag">Tag</label>
          @foreach($tags as $tag)
            <div>
                <label for="tags">{{$tag->name}}</label>
                <input type="checkbox" name="tags[]" value="{{$tag->id}}">
            </div>
         @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </body>
</html>