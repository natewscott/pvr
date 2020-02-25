<template>
<section>
	<CoolLightBox>
		:items="items"
		:index="index"
		:close="index = null"
	</CoolLightBox>
	<div class="images-wrapper">
		<div
			class="image"
			v-for="(image)"
			></div>
	</div>
</section>
</template>
<script>
	export default {
	mounted() {
	console.log('Component mounted.')
	}
	}
</script>