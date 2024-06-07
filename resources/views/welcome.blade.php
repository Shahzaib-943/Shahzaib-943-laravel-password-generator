<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Password Generator</title>
    <style>
        .result-box {
            font-size: 1.2em;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container mt-5 border p-4">
        <h2>Password Generator</h2>
        <form id="passwordForm">
            <div class="mt-3">
                {{-- <label for="generatedPassword" class="form-label">Generated Password</label> --}}
                <input type="text" class="form-control result-box" id="generatedPassword" readonly>
            </div>
            <div class="mb-3 mt-3">
                <label for="passwordLength" class="form-label">Password Length</label>
                <input type="range" class="form-range" min="8" max="25" id="passwordLength" value="12">
                <div id="lengthValue" class="form-text">12</div>
            </div>
            <div class="container row mb-3">
                <div class="col-3 form-check">
                    <input type="checkbox" class="form-check-input" id="includeNumbers">
                    <label class="form-check-label" for="includeNumbers">Numbers</label>
                </div>
                <div class="col-3 form-check">
                    <input type="checkbox" class="form-check-input" id="includeSymbols">
                    <label class="form-check-label" for="includeSymbols">Symbols</label>
                </div>
                <div class="col-3 form-check">
                    <input type="checkbox" class="form-check-input" id="includeLetters">
                    <label class="form-check-label" for="includeLetters">Letters</label>
                </div>
                <div class="col-3 form-check">
                    <input type="checkbox" class="form-check-input" id="includeSpaces">
                    <label class="form-check-label" for="includeSpaces">Spaces</label>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <button type="button" class="btn btn-primary btn-lg rounded-pill" onclick="generatePassword()">Generate</button>
                </div>
                <div class="col-4">
                    <button type="button" class="btn btn-secondary btn-lg rounded-pill" onclick="copyPassword()">Copy</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('passwordLength').addEventListener('input', function() {
            document.getElementById('lengthValue').innerText = this.value;
        });

        function generatePassword() {
            const length = document.getElementById('passwordLength').value;
            const includeNumbers = document.getElementById('includeNumbers').checked;
            const includeSymbols = document.getElementById('includeSymbols').checked;
            const includeLetters = document.getElementById('includeLetters').checked;
            const includeSpaces = document.getElementById('includeSpaces').checked;

            let characters = '';
            if (includeNumbers) characters += '0123456789';
            if (includeSymbols) characters += '!@#$%^&*()_+[]{}|;:,.<>?';
            if (includeLetters) characters += 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            if (includeSpaces) characters += ' ';

            if (!characters) {
                // alert('Please select at least one character set.');
                Swal.fire({
                    title: 'Error!',
                    text: 'Do you want to continue',
                    icon: 'error',
                    confirmButtonText: 'Cool'
                })
                return;
            }

            let password = '';
            for (let i = 0; i < length; i++) {
                const randomIndex = Math.floor(Math.random() * characters.length);
                password += characters[randomIndex];
            }

            document.getElementById('generatedPassword').value = password;
        }

        function copyPassword() {
            const passwordField = document.getElementById('generatedPassword');
            passwordField.select();
            passwordField.setSelectionRange(0, 99999);
            document.execCommand('copy');
            alert('Password copied to clipboard!');
        }
    </script>
</body>
</html>
