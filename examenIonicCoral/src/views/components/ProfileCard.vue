<template>
	<ion-card @click="accionEjecutada()">
		<img :alt="props.alt" :src="props.img" />
		<ion-card-header>
			<ion-card-title>Mi nombre es: {{ props.nombre }}</ion-card-title>
			<ion-card-subtitle>Tengo: {{ props.edad }}</ion-card-subtitle>
		</ion-card-header>
		<ion-card-content>
			{{ props.descripcion }}
		</ion-card-content>
	</ion-card>
</template>
<script lang="ts" setup>
import { IonCard, IonCardContent, IonCardHeader, IonCardSubtitle, IonCardTitle } from
	'@ionic/vue';
import { defineProps, defineEmits } from 'vue';
const props = defineProps(['nombre', 'edad', 'img', 'alt', 'descripcion']);
const emits = defineEmits(['accion']);

const accionEjecutada = () => {
	emits('accion');
}


</script>