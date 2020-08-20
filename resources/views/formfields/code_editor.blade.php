{{-- <div id="{{ $row->field }}" data-theme="{{ @$options->theme }}" data-language="{{ @$options->language }}" class="ace_editor min_height_200" name="{{ $row->field }}">{{ old($row->field, $dataTypeContent->{$row->field} ?? $options->default ?? '') }}</div>
<textarea name="{{ $row->field }}" id="{{ $row->field }}_textarea" class="hidden">{{ old($row->field, $dataTypeContent->{$row->field} ?? $options->default ?? '') }}</textarea> --}}
<div id="{{ $row->field }}" data-theme="{{ @$options->theme }}" data-language="{{ @$options->language }}" class="ace_editor min_height_200" name="{{ $row->field }}">@if(isset($dataTypeContent->{$row->field})){{ old($row->field, is_array($dataTypeContent->{$row->field}) ? json_encode($dataTypeContent->{$row->field}, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) : $dataTypeContent->{$row->field}) }}@elseif(isset($options->default)){{ old($row->field, $options->default) }}@else{{ old($row->field) }}@endif</div>
<textarea name="{{ $row->field }}" id="{{ $row->field }}_textarea" class="hidden">@if(isset($dataTypeContent->{$row->field})){{ old($row->field, is_array($dataTypeContent->{$row->field}) ? json_encode($dataTypeContent->{$row->field}, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) : $dataTypeContent->{$row->field}) }}@elseif(isset($options->default)){{ old($row->field, $options->default) }}@else{{ old($row->field) }}@endif</textarea>

