<template>
	<ion-page>
		<ion-content class="ion-padding">
			<h1>HomePage</h1>
			<ProfileCard :alt="'Silhouette of mountains'"
				:img="'https://ionicframework.com/docs/img/demos/card-media.png'" :nombre="'Coral'" :edad="'20'"
				:descripcion="'Esta es mi carta de presentación'" @accion="mensaje()" />
		</ion-content>
	</ion-page>
</template>

<script setup lang="ts">
import { IonContent, IonPage } from '@ionic/vue';
import ProfileCard from './components/ProfileCard.vue';

const mensaje = () => {
	alert('¡Hola, he sido clickado!');
}

</script>

<style scoped>
ion-card {
	width: 300px;
	background-color: rgb(252, 190, 200);
}
</style>
