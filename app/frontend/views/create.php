{{head}}
{{header}}
<div class="container py-5">
    {{msgs}}
    <h1 class="mb-3 mt-5 text-center">Add new friend</h1>
    <form action="/app/save" method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <div class="col">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="col">
                <label for="surname">Surname:</label>
                <input type="text" name="surname" id="surname" class="form-control">
            </div>
        </div>
        <div class="mb-3">
            <label for="email">Email address:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="phone">Phone number:</label>
            <input type="tel" name="phone" id="phone" class="form-control">
        </div>
        <div class="mb-3">
            <label for="twitter d-block">Twitter:</label>
            <input type="text" name="twitter" id="twitter" class="form-control">
        </div>
        <div class="mb-3">
            <label for="image">Image:</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="mb-3">
            <button class="btn btn-success">Add</button>
        </div>
    </form>
</div>
{{footer}}