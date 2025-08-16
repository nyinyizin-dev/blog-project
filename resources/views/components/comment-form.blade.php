@props(['blog'])
<x-card-wrapper>
     <form action="/blogs/{{ $blog->slug }}/comments" method="post">
         @csrf
         <div class="mb-3">
             <textarea name="body" id="" cols="10" rows="5" placeholder="new comment..." required
                 class="form-control broder border-0"></textarea>
             <x-error name="body" />
         </div>
         <div class="d-flex justify-content-end">
             <button type="submit" class="btn btn-primary">Submit</button>
         </div>
     </form>
 </x-card-wrapper>
