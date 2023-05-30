<?php

if ( isset( $_GET['id'] ) ) {
    $database = connectToDB();

    $sql = "SELECT * FROM posts WHERE id = :id";
    $query = $database->prepare($sql);
    $query->execute([
            'id' => $_GET['id']
    ]);

    $post = $query->fetch();

    if ( !$post ) {
        header("Location: /manage-posts");
        exit;
    }

} else {
    header("Location: /manage-posts");
    exit;
}

require "parts/header.php";
?>
<div class="container mx-auto my-5" style="max-width: 700px;">
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h1 class="h1">Edit Post</h1>
    </div>
    <div class="card mb-2 p-4">
        <form method="POST" action="/posts/edit">
            <div class="mb-3">
                <label for="post-title" class="form-label">Title</label>
                <input
                    type="text"
                    class="form-control"
                    id="post-title"
                    name="title"
                    value="<?= $post['title']; ?>"
                />
            </div>
            <div class="mb-3">
                <label for="post-content" class="form-label">Content</label>
                <textarea class="form-control" id="post-content" name="content" rows="10"><?= $post['content']; ?></textarea
                        >
            </div>
            <div class="mb-3">
                <label for="post-content" class="form-label">Status</label>
                <select class="form-control" id="post-status" name="status">
                    <option value="pending"<?php
                    if ( $post['status'] === 'pending' ) {
                        echo 'selected';
                    }
                    ?>>Pending Review</option>
                    <option value="publish" <?= $post['status'] === 'publish' ? 'selected' : ''; ?>>Publish</option>
                </select>
            </div>
            <div class="text-end">
                <input type="hidden" name="id" value="<?= $post['id']; ?>" />
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
    <div class="text-center">
        <a href="/manage-posts" class="btn btn-link btn-sm"
        ><i class="bi bi-arrow-left"></i> Back to Posts</a
        >
    </div>
</div>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"
></script>
</body>
</html>

