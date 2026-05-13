@extends('layouts.app')
@section('title') {{ __('profession.page_title') }}  @endsection
@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                <h4 class="section-title bg-white text-start text-primary pe-3">{{ __('profession.page_subtitle') }}</h4>
                <p>{{ __('profession.section_text') }}</p>
                <table id="profession-table" class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase">{{ __('profession.table_header1') }}</th>
                            <th class="text-center text-uppercase">{{ __('profession.table_header2') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-subtitle text-uppercase">
                            <td colspan="2">{{ __('profession.sub_header1') }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('profession.prof_1') }}</td>
                            <td>
                                {{ __('profession.year1') }} - 3 {{ __('profession.year') }} <br>
                                {{ __('profession.year2') }} - 2 {{ __('profession.year') }}
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('profession.prof_2') }}</td>
                            <td>
                                {{ __('profession.year1') }} - 3 {{ __('profession.year') }} <br>
                                {{ __('profession.year2') }} - 2 {{ __('profession.year') }}
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('profession.prof_3') }}</td>
                            <td>
                                {{ __('profession.year1') }} - 3.5 {{ __('profession.year') }} <br>
                                {{ __('profession.year2') }} - 2.5 {{ __('profession.year') }}
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('profession.prof_4') }}</td>
                            <td>
                                {{ __('profession.year1') }} - 4 {{ __('profession.year') }} <br>
                                {{ __('profession.year2') }} - 3 {{ __('profession.year') }}
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('profession.prof_5') }}</td>
                            <td>
                                {{ __('profession.year1') }} - 3 {{ __('profession.year') }} <br>
                                {{ __('profession.year2') }} - 2 {{ __('profession.year') }}
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('profession.prof_6') }}</td>
                            <td>
                                {{ __('profession.year1') }} - 4 {{ __('profession.year') }} <br>
                                {{ __('profession.year2') }} - 3 {{ __('profession.year') }}
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('profession.prof_7') }}</td>
                            <td>
                                {{ __('profession.year2') }} - 3 {{ __('profession.year') }}
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('profession.prof_8') }}</td>
                            <td>
                                {{ __('profession.year1') }} - 3.5 {{ __('profession.year') }} <br>
                                {{ __('profession.year2') }} - 2.5 {{ __('profession.year') }}
                            </td>
                        </tr>
                        <tr class="table-subtitle text-uppercase">
                            <td colspan="2">{{ __('profession.sub_header2') }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('profession.prof_9') }}</td>
                            <td>
                                {{ __('profession.year1') }} - 3 {{ __('profession.year') }} <br>
                                {{ __('profession.year2') }} - 1 {{ __('profession.year') }}
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('profession.prof_10') }}</td>
                            <td>
                                {{ __('profession.year1') }} - 3 {{ __('profession.year') }} <br>
                                {{ __('profession.year2') }} - 1 {{ __('profession.year') }}
                            </td>
                        </tr>
                        <tr class="table-subtitle text-uppercase">
                            <td colspan="2">{{ __('profession.sub_header3') }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('profession.prof_1') }}</td>
                            <td>
                                {{ __('profession.year2') }} - 3 {{ __('profession.year') }}
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('profession.prof_11') }}</td>
                            <td>
                                {{ __('profession.year2') }} - 3 {{ __('profession.year') }}
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('profession.prof_3') }}</td>
                            <td>
                                {{ __('profession.year2') }} - 3 {{ __('profession.year') }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
