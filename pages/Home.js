import { withExpoSnack } from 'nativewind';
import { StatusBar } from 'expo-status-bar';
import { Text, View } from 'react-native';
import { styled } from 'nativewind';

const StyledView = styled(View)
const StyledText = styled(Text)

const Home = () => {
  return (
    <StyledView className="flex-1 items-center justify-center">
      <StyledText className="text-slate-800 font-bold text-2xl">
        Panel de control de trabajadores
      </StyledText>
    </StyledView>
  );
}

export default Home;