{{head}}
{{header}}
<div class="container py-5">
    {{msgs}}
    <h1 class="mb-5 text-center">Friend list</h1>
    <table class="table table-striped table-hover text-center table-bordered shadow justify-content-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Email</th>
                <th scope="col">Phone number</th>
                <th scope="col">Twitter</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($friends as $friend) : ?>
                <tr>
                    <th scope="col"><?= $friend->id ?></th>
                    <td><?= $friend->name ?></td>
                    <td><?= $friend->surname ?></td>
                    <td><?= $friend->email ?></td>
                    <td><?= $friend->phone ?></td>
                    <td><?= $friend->twitter ?></td>
                    <td>
                        <a href="/app/profile?id=<?= $friend->id ?>" class="btn btn-outline-secondary">View</a>
                        <a href="/app/edit?id=<?= $friend->id ?>" class="btn btn-outline-primary">Edit</a>
                        <a href="/app/destroy?id=<?= $friend->id ?>" class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
{{footer}}