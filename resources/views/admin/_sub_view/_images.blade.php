<div class="container my-3">

  <form method="POST" action="{{ route('update_images', $section) }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    @for($i = 0; $i < $j = $section->images->count(); $i++)

    <div class="media">
      <img src="{{ $section->images[$i]['src'] }}" class="col-2 mr-3" alt="{{ $section->images[$i]['alt'] }}">
      <div class="media-body">
        <div class="form-group">
          <label for="src" class="control-label">src</label>

          <input id="src" type="text" class="form-control" name="images[{{ $i }}][src]" value="{{ $section->images[$i]['src'] }}">
        </div>

        <div class="form-group">
          <label for="alt" class="control-label">alt</label>

          <input id="alt" type="text" class="form-control" name="images[{{ $i }}][alt]" value="{{ $section->images[$i]['alt'] }}">
        </div>
      </div>
    </div>

    <hr>
    @endfor

    <button type="submit" class="btn btn-outline-primary">
      Сохранить
    </button>
  </form>

</div>
