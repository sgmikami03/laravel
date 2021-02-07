@csrf
<div class='mg-form'>
  <label>タイトル</label>
  <input type="text" name='title' class='form-control' required value="{{ ord('title') }}">
</div>
<div class='form-group'>
  <label></label>
  <textarea name="body" required class='form-control' rows="16" placeholder='本文'></textarea>
</div>
