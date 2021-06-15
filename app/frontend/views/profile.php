{{head}}
{{header}}
<div class="container">
    <div class="card mt-5 mb-5 shadow">
        <img src="/app/file?filename=<?= $friend->image ?>">
        <div class="card-body">
            <h5 class="card-title"><?= "{$friend->name} {$friend->surname}" ?></h5>
            <p class="card-text">Twitter: <?= $friend->twitter ?></p>
            <p class="card-text">Phone number: <?= $friend->phone ?></p>
        </div>
    </div>
</div>
{{footer}}