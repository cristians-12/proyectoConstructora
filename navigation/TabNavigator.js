import { createNativeStackNavigator } from "@react-navigation/native-stack";
import { Home } from "../pages/Home";

export default function TabNavigator() {
  const Stack = createNativeStackNavigator();

  return (
    <Stack.Navigator>
      <Stack.Screen
        name="Seleccion"
        component={Home}
        options={{
          headerShown: false,
        }}
      />
    </Stack.Navigator>
  );
}
