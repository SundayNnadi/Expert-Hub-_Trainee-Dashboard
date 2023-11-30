<style>
   body {
  font-family: 'Roboto', sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
 background-image: url(background-image.jpg.jpg);
}
input,
textarea {
  margin-bottom: 15px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}
  section {
  margin: 20px;
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}
nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  text-align: center;
}
nav ul li {
  display: inline;
  margin-right: 10px;
}
</style>


<section id="upload">
  <!-- ... previous code ... -->

  <form id="uploadForm" action="{{ route('upload.upload') }}" enctype="multipart/form-data" method="POST">
      @csrf
      <label for="media">Select Media:</label>
      <input type="file" id="media" name="media" accept="image/*, video/*" required>

      <label for="description">Description:</label>
      <textarea id="description" name="description" rows="4" placeholder="Add a description..."></textarea>

      <input type="submit" value="Upload">

      @if(isset($mediaPath))
          <p>Media Uploaded:</p>
          @if(str_ends_with($mediaPath, '.mp4'))
              <video width="320" height="240" controls>
                  <source src="{{ $mediaPath }}" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
          @else
              <img src="{{ $mediaPath }}" alt="Uploaded Media">
          @endif

          @if(isset($description))
              <p>Description: {{ $description }}</p>
          @endif
      @else
          <p>No media uploaded</p>
      @endif
  </form>
</section>

<script src="script.js">
  document.getElementById('uploadForm').addEventListener('submit', function (event) {
event.preventDefault();

const formData = new FormData(this);

// Make an AJAX request to Laravel backend for content upload
fetch('/upload', {
  method: 'POST',
  body: formData,
  headers: {
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
  },
})
.then(response => response.json())
.then(data => {
  console.log(data); // Log the response from the server
  // You can update the UI or perform additional actions based on the server response
})
.catch(error => {
  console.error('Error:', error);
});
});
document.getElementById('loginForm').addEventListener('submit', function (event) {
event.preventDefault();
<script>