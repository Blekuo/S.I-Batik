<style>
    /* Center the spinner both vertically and horizontally */
    .loading-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        animation-duration: 100ms; /* Default is 2s, you can speed it up or slow it down */
    }
    .loading-container i {
        font-size: 4rem;
        color: #007bff; /* Change to your desired color */
    }
</style>
<!-- Loading Spinner -->
<div class="loading-container">
    <i class="fas fa-circle-notch fa-spin text-white"></i>
    <div class="mt-3 text-white">Harap Tunggu...</div>
</div>
<script>
    // Example: Simulate loading by hiding the spinner after 3 seconds
    setTimeout(function() {
        document.querySelector('.loading-container').style.display = 'none';
        document.getElementById('content').classList.remove('d-none');
    }, 1500);
</script>
