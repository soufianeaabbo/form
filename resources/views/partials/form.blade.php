<section class="container d-flex justify-content-center">
    <form class="w-50" method="post" action="/store">
        @csrf
        <div class="mb-3">
            <label for="">Name</label>   
            <input name="name" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Firstname</label>
            <input name="firstname" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label nameclass="form-label">BirthDate</label>
            <input name="birthDate" type="date" class="form-control">
        </div>
        <div class="mb-3">
            <select name="gender">
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>
