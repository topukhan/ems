<x-backend.layouts.master>
<!-- Main Content -->

        <x-backend.layouts.partials.elements.totalCount/>
        <x-backend.layouts.partials.elements.statistics/>
        <x-backend.layouts.partials.elements.performance/>
        <x-backend.layouts.partials.elements.applicationSales/>
        <x-backend.layouts.partials.elements.description/>
         
   
        @push('js')
        <script src="{{('ui/backend/assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
        <script src="{{('ui/backend/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->
        
        <script src="{{('ui/backend/assets/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob-->
        <script src="{{('ui/backend/assets/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
        <script src="{{('ui/backend/assets/bundles/morrisscripts.bundle.js"')}}"></script> <!-- Morris Plugin Js --> 
        <script src="{{('ui/backend/assets/bundles/sparkline.bundle.js')}}"></script> <!-- sparkline Plugin Js --> 
        <script src="{{('ui/backend/assets/bundles/doughnut.bundle.js')}}"></script>
        
        <script src="{{('ui/backend/assets/bundles/mainscripts.bundle.js')}}"></script>
        <script src="{{('ui/backend/assets/js/pages/index.js')}}"></script>
        @endpush
</x-backend.layouts.master>