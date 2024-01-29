@if (session()->has('success'))
            <div 
                x-data="{show:true}"
                x-init="setTimeout(() => show = false, 4000)"
                x-show = "show"
                class="fixed bg-blue-500 text-white mr-4 py-2 px-4 rounded-xl top-3 right-3 text-sm">
                <p>{{session('success')}}</p>
            </div>
@endif