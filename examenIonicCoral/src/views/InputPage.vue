<template>
	<ion-page>
		<ion-content class="ion-padding">
			<ion-list class="content">
				<h1>Formulario</h1>
				<ion-item>
					<ion-input v-model="valor" placeholder="Escribe aquí..."></ion-input>
				</ion-item>
				<ion-item>
					<p>El valor es: {{ valor }}</p>
				</ion-item>
			</ion-list>
		</ion-content>
	</ion-page>
</template>
<script lang="ts" setup>
import { IonPage, IonContent, IonInput, IonItem, IonList } from '@ionic/vue';
import { ref } from 'vue';
const valor = ref('');
</script>

<style scoped>
.content {
	width: 400px;
	background-color: rgb(250, 248, 124);
}
</style>
