<template>
	<ion-app>
		<ion-menu content-id="main-content">
			<ion-header>
				<ion-toolbar color="primary">
					<ion-title>Menu Content</ion-title>
				</ion-toolbar>
			</ion-header>
			<ion-content class="ion-padding">
				<ion-list>
					<ion-item button router-link="/home">Home</ion-item>
					<ion-item button router-link="/input">Formulario</ion-item>
				</ion-list>
			</ion-content>
		</ion-menu>
		<ion-page id="main-content">
			<ion-header>
				<ion-toolbar color="primary">
					<ion-buttons slot="start">
						<ion-menu-button></ion-menu-button>
					</ion-buttons>
					<ion-title>Menu</ion-title>
				</ion-toolbar>
			</ion-header>
			<ion-content class="ion-padding">
				<ion-router-outlet />
			</ion-content>
		</ion-page>
	</ion-app>
</template>
<script lang="ts" setup>
import { IonApp, IonList, IonRouterOutlet, IonItem, IonButtons, IonContent, IonHeader, IonMenu, IonMenuButton, IonPage, IonTitle, IonToolbar }
	from '@ionic/vue';

</script>

<style scoped></style>