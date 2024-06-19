@extends('layouts.adminlayout')
@section('title', 'Admin Dashboard')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	

<template>
  <div>
    <draggable v-model="sections" @end="updateOrder">
      <div v-for="section in sections" :key="section.id">
        <!-- Customize each section component -->
        <section-component :section="section"></section-component>
      </div>
    </draggable>
  </div>
</template>
					
</div>
@endsection


<script>
import draggable from 'vuedraggable';
import SectionComponent from './SectionComponent';

export default {
  components: {
    draggable,
    SectionComponent
  },
  data() {
    return {
      sections: []
    }
  },
  methods: {
    updateOrder() {
      // Update order in the database
      axios.post('/api/sections/order', this.sections);
    }
  }
}
</script>








