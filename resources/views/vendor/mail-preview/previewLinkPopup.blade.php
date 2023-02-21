<div id="MailPreviewDriverBox" style="
    position:absolute;
    top:10px;
    right:10px;
    z-index:99999;
    background:#fff;
    border:solid 1px #ccc;
    padding: 15px;
">
    An email was just sent!
    <ul>
        <li>
            <a style="text-decoration: underline" href="{{ $previewUrl }}&file_type=html">Preview sent mail in
                browser</a>
        </li>
        <li>
            <a style="text-decoration: underline" href="{{ $previewUrl }}&file_type=eml">Open mail in email client</a>
        </li>
    </ul>
    <span onclick="closePopup()" id="close" style="
           cursor: pointer;
           font-size: smaller;
           position: absolute;
           top: 2px;
           right: 6px;
           font-family: monospace;
    ">
        X
    </span>
</div>
<script type="text/javascript">
    function closePopup() {
        document.body.removeChild(document.getElementById("MailPreviewDriverBox"))
    }

    @if($timeoutInSeconds)
    setTimeout(closePopup, {{ $timeoutInSeconds }} * 1000)
    @endif
</script>
