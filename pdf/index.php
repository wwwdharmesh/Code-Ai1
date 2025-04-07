<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Generator</title>
    
    <!-- TinyMCE Script with API Key -->
    <script src="https://cdn.tiny.cloud/1/2kfsj3q9hpc3mbt6v786b2d4krakclg6ffrnl1sepel2r8d7/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 50px;
            color: #333;
        }
        .form-container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h1>Create Your Presentation PDF</h1>

    <div class="form-container">
        <form action="generate_pdf.php" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" value="<?= isset($name) ? htmlspecialchars($name) : '' ?>" required>

            <label for="title">Presentation Title:</label>
            <input type="text" id="title" name="title" value="<?= isset($title) ? htmlspecialchars($title) : '' ?>" required>

            <label for="topic">Select Topic:</label>
            <select id="topic" name="topic" required>
                <option value="science" <?= isset($topic) && $topic == 'science' ? 'selected' : '' ?>>Science</option>
                <option value="history" <?= isset($topic) && $topic == 'history' ? 'selected' : '' ?>>History</option>
                <option value="technology" <?= isset($topic) && $topic == 'technology' ? 'selected' : '' ?>>Technology</option>
                <option value="math" <?= isset($topic) && $topic == 'math' ? 'selected' : '' ?>>Math</option>
            </select>

            <label for="custom_content">Custom Content (Optional):</label>
            <!-- TinyMCE editor will replace this textarea -->
            <textarea id="custom_content" name="custom_content" rows="5" placeholder="Write your content related to the selected topic (optional)"><?= isset($custom_content) ? htmlspecialchars($custom_content) : '' ?></textarea>

            <input type="submit" value="Generate PDF">
        </form>
    </div>

    <!-- Initialize TinyMCE for the textarea -->
    <script>
      tinymce.init({
        selector: 'textarea',  // This targets all <textarea> elements
        plugins: [
          'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
          'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
        ],
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
          { value: 'First.Name', title: 'First Name' },
          { value: 'Email', title: 'Email' },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
      });
    </script>

</body>
</html>
