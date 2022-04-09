@php
$color = $message = null;
if (session()->has("success")) {
$color = "success";
$message = session()->get("success");
} elseif (session()->has("error")) {
$color = "danger";
$message = session()->get("error");
}
@endphp

@if($color)
<script>
    createAlert("{{$message}}", "{{$color}}");
</script>
@endif
